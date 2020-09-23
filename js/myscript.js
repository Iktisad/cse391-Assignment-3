
class UI{
static showAlert(message, className) {
    const div = document.createElement('div');
    div.className = `alert alert-${className}`;
    div.appendChild(document.createTextNode(message));
    const container = document.querySelector('.container');
    const form = document.querySelector('#reg');
    container.insertBefore(div, form);

     //Vanish in 3 seconds
    setTimeout(() => document.querySelector('.alert').remove(), 3000);
  }
}





