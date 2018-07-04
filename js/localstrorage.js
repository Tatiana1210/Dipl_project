(function () {
  var raz = document.getElementsByName('answer');
  for (var i = 0; i < answer.length; i++) {
    answer[i].onclick = function() {
      localStorage.setItem('answer_ch', this.value);
    }
  }
  if(localStorage.getItem('answer_ch')) {
    var Аnswer_ch = localStorage.getItem('answer_ch');
    document.querySelector('input[name="answer"][value="' + Аnswer_ch + '"]').setAttribute('checked','checked');
  }
}());
