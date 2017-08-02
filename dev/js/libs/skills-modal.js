$(function(){
  $('#container__tech .grid-1-3').on('click', function(e){
    e.preventDefault();

    var clicked = $(this).attr('id');

    var xhr = new XMLHttpRequest();
    xhr.open("GET", "xml/skills-data.xml", false);
    xhr.send();
    var xml = xhr.responseXML;
    var clickedSkill;
    console.log(xml);

    $(xml).find('skill[id="'+clicked+'"]')
    {
      var name = $(this).children('name').text();
      console.log(name);
      var image = $(this).children('image').text();
      var desc = $(this).children('desc').text();
      var exp = $(this).children('exp').text();
      var env = $(this).children('env').text();
      $('.skills-modal h1').html(name);
      $('.skills-modal .exp').html(exp);
      $('.skills-modal').show();
    };
  });
});
