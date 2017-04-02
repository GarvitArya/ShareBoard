/*************************/
/****UPLOAD BUTTON********/
/***********************/

/*makes another button on top of <input> */
$('#input-file').before('<input name="file" class="pull-left" type="file" id="button-file" accept="text/*" value="Upload Profile Picture" />');
$('#input-file').hide();
$('body').on('click', '#button-file', function() {
    $('#input-file').trigger('click');
});


/* random color for bubbles */

var colors = ['#E2E27C', '#B7B6A3', '#ADC6BE', '#A5ADA1', '#ADBF8D', '#FFFC99'];
var bubbles = document.querySelectorAll(".bubble");

/* note: won't generate random colors for speech bubble triangle -> should be borderTopColor */
window.onload=function(){
  for (i = 0; i < bubbles.length; i++) {
    // Pick a random color from the array 'colors'.
    var color = colors[Math.floor(Math.random() * colors.length)];
    bubbles[i].style.background = color;
  //  bubbles[i].style.borderTopColor = color;
    bubbles[i].style.border = color;
  }
}
