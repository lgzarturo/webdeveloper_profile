let greetings =  "hello world!"
console.log({ greetings })

$(document).ready(function() {
  $('.coming_soon').click(function(e) {
    e.preventDefault();
    alert('This section is coming soon');
  });
  $('.nav_primary a').click(function(e) {
    $('.nav_primary a').each(function() {
      $(this).removeClass('active');
    });
    $(e.target).addClass('active');
  });
});
