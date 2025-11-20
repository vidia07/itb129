const texts = [
  "Tanya apa saja, ChatGPT membantu.",
  "Butuh ide? ChatGPT siap bantu.",
  "Belajar jadi lebih mudah dengan AI."
];

let index = 0;
let char = 0;
const typing = document.getElementById("typing");

function type() {
  typing.textContent = texts[index].slice(0, char++);
  if (char <= texts[index].length) {
    setTimeout(type, 60);
  } else {
    setTimeout(erase, 900);
  }
}

function erase() {
  typing.textContent = texts[index].slice(0, char--);
  if (char > 0) {
    setTimeout(erase, 40);
  } else {
    index = (index + 1) % texts.length;
    setTimeout(type, 400);
  }
}

type();
