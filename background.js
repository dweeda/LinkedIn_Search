chrome.app.runtime.onLaunched.addListener(function() {
  chrome.app.window.create('index.php', {
    'bounds': {'width': 800, 'height': 1000 }
  });
});