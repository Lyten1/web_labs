const Calculator = function(options){
    this.first = options.first
    this.sign  = options.sign
    this.second = options.second
}

Calculator.prototype.add = function(){
    alert(this.first + this.second)
}
Calculator.prototype.rem = function(){
    alert(this.first - this.second)
}
Calculator.prototype.mul = function(){
    alert(this.first * this.second)
}
Calculator.prototype.div = function(){
    alert(this.first / this.second)
}

let f,s,si;

f = +prompt('First value: ', '')
si = prompt('Sign: ', '')
s = +prompt('Second value: ', '')

const Math = new Calculator({first: f, sign: si, second: s})

switch (si) {
    case '+':
        Math.add()
        break;
    case '-':
        Math.rem()
        break;
    case '*':
        Math.mul()
        break;
    case '/':
        Math.div()
        break;
    default:
        break;
}