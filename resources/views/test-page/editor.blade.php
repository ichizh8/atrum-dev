<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- ... -->
    <script src="https://unpkg.com/@grapesjs/studio-sdk/dist/index.umd.js"></script>
    
    <link rel="stylesheet" href="https://unpkg.com/@grapesjs/studio-sdk/dist/style.css"/>
  </head>
  <body>
    <div id="studio-editor" style="height: 100dvh"></div>
    <script>
      GrapesJsStudioSDK.createStudioEditor({
        root: '#studio-editor',
        licenseKey: '{{ config("app.grape_license_key") }}',
        theme: 'dark',
        project: {
          type: 'web'
        },
        assets: {
          storageType: 'self',
          // Provide a custom upload handler for assets
          onUpload: async ({ files }) => {
            const body = new FormData();
            for (const file of files) {
              body.append('files[]', file);
            }
            const response = await fetch('/api/system/upload', { method: 'POST', body });
            const result = await response.json();
            // The expected result should be an array of assets, eg.
            // [{ src: 'ASSET_URL' }]
            return result;
          },
          // Provide a custom handler for deleting assets
          onDelete: async ({ assets }) => {
            const body = JSON.stringify(assets);
            await fetch('ASSETS_DELETE_URL', { method: 'DELETE', body });
          },
        },
        storage: {
          type: 'self',
          // Provide a custom handler for saving the project data.
          onSave: async ({ project, editor }) => {
            console.log(editor);
            const files = await editor.runCommand('studio:projectFiles', { styles: 'inline' })
            // For simplicity, we'll "publish" only the first page.
            const firstPage = files.find(file => file.mimeType === 'text/html');
            const html = firstPage.content;
            
            const body = new FormData();
            body.append('project', JSON.stringify(project));
            body.append('page_id', 'test-page')
            body.append('html', html);
            // throw new Error('Implement your "onSave"!');
            await fetch('/api/grapes', { method: 'POST', body });
          },
          // Provide a custom handler for loading project data.
          onLoad: async () => {
            // throw new Error('Implement your "onLoad"!');
            const response = await fetch('/api/grapes?page_id=test-page');
            
            const body = await response.json();
            const project = body.project;
            
            // The project JSON is expected to be returned inside an object.
            return { project };
          },
          autosaveChanges: 100,
          autosaveIntervalMs: 10000
        }
      });
    </script>
  </body>
<html>