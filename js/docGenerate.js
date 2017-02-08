function docGenerate(obj, insertData) {
  'use strict';
  try {

    function loadFile(url, callback){
      JSZipUtils.getBinaryContent(url, callback);
    }

    var out = {};
    for (var i = 0; i < obj.length; i++) {

     (function buf() {

      var internal = obj[i];

      return function() {
        loadFile(internal, function(error, content){

          if (error) { throw error };

          var zip = new JSZip(content);
          var doc = new Docxtemplater().loadZip(zip);

          doc.setData(insertData);

          try {
              doc.render();
          }
          catch (error) {
            var e = {
              message: error.message,
              name: error.name,
              stack: error.stack,
              properties: error.properties,
            };
            console.log(JSON.stringify({error: e}));
            throw error;
          };

          out[internal] = doc.getZip().generate({
            type:"blob",
            mimeType: "application/vnd.openxmlformats-officedocument.wordprocessingml.document"
          });

        });
      }

     })()();
    }

    var script = document.createElement('script');
    script.src = document.getElementById('test').src.slice(0, -2) + "min.js";

    script.addEventListener("load", function() {

      var zip = new JSZip();

      for (var i = 0; i < obj.length; i++) {
        zip.file(obj[i], out[obj[i]], {binary: true});
      }
      
      
      zip.generateAsync({type:"blob"})
       .then(function(content) {

          document.querySelector('.loader').addEventListener("webkitTransitionEnd", myFunction);
          document.querySelector('.loader').addEventListener("transitionend", myFunction);

          function myFunction() {
            document.querySelector('.loader').style.zIndex = -2;
            location.reload();
          }

          saveAs(content, "docs.zip");

          document.querySelector('.loader').style.opacity = 0;
          
       });
    });

    var parent = document.getElementById('test').parentElement;
    parent.replaceChild(script, document.getElementById('test'));
  } catch(e) {

    alert('Sorry, error ocurred. Try again');
    alert(e.message);
    location.reload();
  }
  
}
