$(function(){
 $('#tmm').each(function(){
console.log(this); })
var body=null;
var postId=0;
$('.a').find('.b').find('#edit-sec').on('click',function(event){
    event.preventDefault();
    body=event.target.parentNode.parentNode.childNodes[1];
    var postbody= body.textContent;
    postId= event.target.parentNode.parentNode.parentNode.dataset['postid'];
    $('#ta').val(postbody);
   $('#modee').modal();
});

$('.a').find('.b').find('#comm').on('click',function(e){
  e.preventDefault();
  var d=e.target;
  var postId= e.target.parentNode.parentNode.dataset['postid'];
  var mod=d.parentNode.parentNode.children[6].children[0];
  $(mod).modal();
  });
 
$('#modal-save').on('click',function(){
  $.ajax({
    method:'POST',
    url: urlEdit,
    data:{body: $('#ta').val(), postId:postId, _token:token}
  
  }).done(function(data){
    $(body).text(data['newBody']);
    $('#modee').modal('hide');

  });
});

$('.a').find('.b').find('#like').find('#heart').on('click',function(e){
  e.preventDefault();
  postId= e.target.parentNode.parentNode.parentNode.dataset['postid'];
  if($(this).hasClass('fa')){
    $(this).removeClass('fa text-danger');
    $(this).addClass('text-secondary');

  }
  else{
    $(this).addClass('fa text-danger');

  }
  var clas=$(this).hasClass('fa');
  $.ajax({
    method:'POST',
    url:urlLike,
    data:{like: clas,postId:postId, _token:token},
  }).done(function(data){
    var lik=data['likes'];
    var span=e.target.parentNode.parentNode.children[3].children[0];

    var span2=e.target.parentNode.parentNode.children[3].children[1];
    if(lik==0){
      span.innerHTML='';
      span2.innerHTML='';

    }
    else if(lik==1){
      span.innerHTML=lik;
      span2.innerHTML='Like';

    }
    else{
      span.innerHTML=lik;
      span2.innerHTML='Likes';
    }
    
  });

});
var h=$('#msg');
 h.fadeOut(1500);

 $('.a').find('.b').find('#formCom').on('submit',function(e){
  e.preventDefault();
  var com=e.target.children[0].children[0].value;
  var comm=e.target.children[0].children[0];
  var postId=e.target.parentNode.parentNode.dataset['postid'];
  var path=e.target.parentNode.children[6].children[0].children[0].children[0].children[1].children[0].children[0];
  var cnum=e.target.parentNode.children[2].children[0];
  var cword=e.target.parentNode.children[2].children[1];
  $.ajax({
    method:'POST',
    url:urlCom,
    data:{comment:com,postId,postId,_token:token}
  }).done(function(data){
    var countt=data['count'].length;
    if(countt==0)
    {
      cnum.innerHTML='';
      cword.innerHTML='';
    }
    else if(countt==1)
    {
      cnum.innerHTML=countt;
      cword.innerHTML='Comment'
    }
    else{
      cnum.innerHTML=countt;
      cword.innerHTML='Comments'
    }
      comm.value=null;
    var ncom=data['a'].comment;
    var us=data['us'];
    var t=data['t'];
    console.log(t);
      var a='<div class="col-12 card bg-light mb-2"><h6>'+us+'</h6>'+'<p>'+ncom+'</p>'+'<small class="text-muted">'+t+'</small></div>';
       $(path).prepend(a);
       $(e.target).append(a)
  });

 });


// $(".custom-file-input").on("change", function() {
//     var fileName = $(this).val().split("\\").pop();
//     $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
//   });

});

var chos = document.getElementById('img-lab');
var zer= document.getElementById('customFile');
zer.addEventListener('change',load);

function load(){
  var name=zer.value.split('\\').pop();
chos.innerHTML=name;

}
