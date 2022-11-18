let input = document.getElementById("input");
let from = document.getElementById('from');
let to = document.getElementById('to');
let result = document.getElementById('result');
let calc = document.getElementById('calc');

function createOption(container, option, value) {
    let o = document.createElement('option');
    let t = document.createTextNode(option);
    o.setAttribute('value', toRealValue(value));
    o.appendChild(t);
    container.appendChild(o);
}
function toRealValue(a) {
    return Number(a.replace(",", ''));
}
function storeRecord() {
    localStorage.setItem('record', tbody.innerHTML);
}
for (let i in data.rates) {
    createOption(from, i, data.rates[i]);
    createOption(to, i, data.rates[i]);
}
let tbody = document.getElementById("history-list");
function createTr(x) {
    let tr = document.createElement('tr');
    tr.setAttribute('class', 'recordRow');
    let rowSpacer = document.getElementById("rowSpacer");
    if (rowSpacer) {
        rowSpacer.remove();
    }
    x.map(el => {
        let td = document.createElement('td');
        let text = document.createTextNode(el);
        td.appendChild(text);
        tr.appendChild(td);
    })
    tbody.appendChild(tr);
}

function deleteRecord(i) {
    let delRow = document.getElementsByClassName("recordRow")[i - 1];
    delRow.remove();
}

let toName = "";
let fromName = "";
to.addEventListener('change', _ => {
    toName = to.options[to.selectedIndex].text;
})
from.addEventListener('change', _ => {
    fromName = from.options[from.selectedIndex].text;
})
let id = 0;
calc.addEventListener('submit', e => {
    e.preventDefault();
    id++;
    console.log(id);
    let x = input.value;
    let y = from.value;
    let z = to.value;
    let first = x * y;
    let second = (first / z).toFixed(2);

    let fromCurrency = x + " " + fromName;
    let toCurrency = toName;
    let final = second;
    let date = new Date();
    let dataArr = [date.getDate(), fromCurrency, toCurrency, final];

    result.innerHTML = final.toString();
    input.value = "";
    input.setAttribute("placeholder", "00.0");
    from.value = "";
    to.value = "";
    input.focus();
    createTr(dataArr);
    storeRecord();
});

//iife
(function () {
    if (localStorage.getItem("record")) {
        tbody.innerHTML = localStorage.getItem("record");
    }
    else {
        tbody.innerHTML = `<tr id="rowSpacer" ><td colspan="4">There is no record</td></tr>`
    }
})();


document.querySelectorAll(".recordRow").forEach(e => {
    e.ondblclick = function () {
        e.remove();
    }
});
function changeMode() {
    document.body.classList.toggle("night-mode");
    document.getElementById("mode-icon").classList.toggle("fa-sun")
}

