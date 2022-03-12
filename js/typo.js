const editor = window.Grav.default.Forms.Fields.EditorField.Instance.editors[0];
const cm = jQuery(editor).data('codemirror');

cm.setOption('specialChars', /[\u0000-\u001f\u007f-\u009f\u00ad\u061c\u200b-\u200f\u2028\u2029\ufeff\ufff9-\ufffc\u00a0]/);

// from trailingspace addon
cm.addOverlay({
  token: function(stream) {
    for (var l = stream.string.length, i = l; i && /\s/.test(stream.string.charAt(i - 1)); --i) {}
    if (i > stream.pos) { stream.pos = i; return null; }
    stream.pos = l;
    return "trailingspace";
  },
  name: "trailingspace"
});

// listen for .tyh-button clicks
$( ".tyh-button" ).click(function() {
  // get char
  let char = this.childNodes[0].firstChild.data;

  // insert char
  cm.replaceSelection(char);
});
