function count() {
  var count = 1;
  const counter = document.querySelector('#counter');
  setInterval(() => {
    counter.textContent = count;
    count += 1;
  }, 1000);
}

count();