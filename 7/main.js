let numbers = [2, 5, 12, 13, 15, 18, 22];
function isEven() {
    for (let i = 0; i < numbers.length; i++) {
        let num = numbers[i]
        if(num % 2 === 0){
        console.log(num + 'は偶数です');
      };
    };
}
isEven();



class Car {
  constructor(Gas,Num){
    this.Gas=Gas;
    this.Num=Num;
  }
  getNumGas(){
    console.log(`ガソリンは${this.Gas}です。ナンバーは${this.Num}です。`);
  }
}

let car1 = new Car(25.5,1234);
car1.getNumGas();
