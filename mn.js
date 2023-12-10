function change() {
    let selectChoice = document.getElementsByName("product-choice")[0].value;
    if (selectChoice == 1) {
        let checkBox = document.getElementById("option-choices");
        checkBox.innerHTML = "";
    }
    if (selectChoice == 2) {
        let checkBox = document.getElementById("option-choices");
        checkBox.innerHTML = '\
        <input type="radio" id="onecomp" name="someGroupName" required="">\n \
        <label for="onecomp">Крупные</label>\n \
        <input type="radio" id="twocomp" name="someGroupName">\n \
        <label for="twocomp">Мелкие</label> \
        ';
    }
    else if (selectChoice == 3) {
        let checkBox = document.getElementById("option-choices");
        checkBox.innerHTML = '\
        <input type="checkbox" id="acryl">\n \
        <label for="acryl">Мелкие</label>\n \
        <input type="checkbox" id="base">\n \
        <label for="base">Средние</label>\n \
        <input type="checkbox" id="powder">\n \
        <label for="powder">Крупные</label> \
        ';
    }
}

function getSum() {
    let selectChoice = document.getElementsByName("product-choice")[0].value;
    let sums = [10, 100, 1000];
    let resultSum = sums[selectChoice - 1] + checkOptions(selectChoice);

    let amount = document.getElementById("amount-of-products").value;
    if (amount.match(/^[0-9]$/))
        resultSum *= amount;
    else
        alert("Максимум 9 мешков!");
    let result = document.getElementById("result");

    result.innerHTML = resultSum;
    let prodPrice = document.getElementById("prodPrice");
    prodPrice.innerHTML = price + " рублей";


    function newFunction() {
        updatePrice();
    }
}

function checkOptions(choice) {
    if (choice == 2) {
        let checkbox1 = document.getElementById("onecomp");
        let checkbox2 = document.getElementById("twocomp");

        return (checkbox1.checked ? 1000 : 0) + (checkbox2.checked ? 10 : 0);
    }
    else if (choice == 3) {
        let checkbox1 = document.getElementById("acryl");
        let checkbox2 = document.getElementById("base");
        let checkBox3 = document.getElementById("powder");

        return (checkbox1.checked ? 10 : 0) + (checkbox2.checked ? 100 : 0) + (checkBox3.checked ? 1000 : 0);
    }
    else
        return 0;
}