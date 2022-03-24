const form = document.querySelector('.contactForm');
function sendEmail(e){
  e.preventDefault()

  const name = document.getElementById('.name'),
      email = document.getElementById('.email'),
      subject = document.getElementById('.subject'),
      message = document.getElementById('.message');

Email.send({
    Host : "smtp.gmail.com",
    Username : "christianloyal2@gmail.com",
    Password : "nnennaya",
    To : 'christianloyal2@gmail.com',
    From : document.getElementById("email").value,
    Subject : "New Contact Form Enquiry",
    Body : "Name: " + document.getElementById("name").value
       + "<br> Email: " + document.getElementById("email").value
       + "<br> Subject: " + document.getElementById("subject").value
       + "<br> Message: " + document.getElementById("message").value
  }).then(
  message => alert("Message Sent Successfully")
  );


}

form.addEventListener('submit',sendEmail);


