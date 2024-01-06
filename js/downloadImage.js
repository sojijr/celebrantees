document.getElementById('download-image').addEventListener('click', function() {
      // Capture the first element
      html2canvas(document.getElementById('month-box')).then(function(canvas1) {
        // Convert the canvas to a data URL and create a link to download
        var link1 = document.createElement('a');
        link1.href = canvas1.toDataURL();
        link1.download = 'month-box.png';
        link1.click();
      });

      // Capture the second element
      html2canvas(document.getElementById('month-box-2')).then(function(canvas2) {
        // Convert the canvas to a data URL and create a link to download
        var link2 = document.createElement('a');
        link2.href = canvas2.toDataURL();
        link2.download = 'month-box-2.png';
        link2.click();
      });
    });
