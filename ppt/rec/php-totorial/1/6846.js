// asciinema.org - embeddable player

(function() {
  var iframe;

  function receiveSize(e) {
    if (e.origin === document.location.protocol + "//asciinema.org") {
      var event = e.data[0];
      var data  = e.data[1];
      if (event == 'asciicast:size' && data.id == 6846) {
        iframe.style.width  = '' + data.width + 'px';
        iframe.style.height = '' + data.height + 'px';
      }
    }
  }

  function insertAfter(referenceNode, newNode) {
    referenceNode.parentNode.insertBefore(newNode, referenceNode.nextSibling);
  }

  function params(container, script) {
    var params = '?container_width=' + container.offsetWidth;

    var size = script.getAttribute('data-size');
    if (size) {
      params += '&size=' + size;
    }
    var speed = script.getAttribute('data-speed');
    if (speed) {
      params += '&speed=' + speed;
    }

    return params;
  }

  function insertPlayer(script) {
    var container = document.createElement('div');
    container.id = "asciicast-container-6846";
    container.className = 'asciicast';
    container.style.display = 'block';
    container.style.float = 'none';
    container.style.overflow = 'hidden';
    container.style.padding = 0;
    container.style.margin = '20px 0';

    insertAfter(script, container);

    iframe = document.createElement('iframe');
    iframe.src = "http://asciinema.org/a/6846/raw" + params(container, script);
    iframe.id = "asciicast-iframe-6846";
    iframe.name = "asciicast-iframe-6846";
    iframe.scrolling = "no";
    iframe.style.overflow = "hidden";
    iframe.style.margin = 0;
    iframe.style.border = 0;
    iframe.style.display = "block";
    iframe.style.float = "none";
    iframe.style.visibility = "hidden";
    iframe.onload = function() { this.style.visibility = 'visible' };

    container.appendChild(iframe);
  }

  var script = document.getElementById("asciicast-6846");

  if (script) {
    insertPlayer(script);
    window.addEventListener("message", receiveSize, false);
  }
})();
