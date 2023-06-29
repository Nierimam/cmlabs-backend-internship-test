document.addEventListener('DOMContentLoaded', function () {
    for (let i = 1; i <= 100; i++) {
        if (i % 3 === 0 && i % 5 === 0) {
            document.getElementById('result').innerHTML +=
                '<span class="fizzbuzz">FizzBuzz</span>';
        } else if (i % 3 === 0) {
            document.getElementById('result').innerHTML +=
                '<span class="fizz">Fizz</span>';
        } else if (i % 5 === 0) {
            document.getElementById('result').innerHTML +=
                '<span class="buzz">Buzz</span>';
        } else {
            document.getElementById('result').innerHTML +=
                '<span class="number">' + i + '</span>';
        }
    }
});
