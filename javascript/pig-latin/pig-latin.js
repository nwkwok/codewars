function pigIt(str){
    let newArray = [];
    let words = [];
    let wordArry = str.split(' ')
    
    wordArry.forEach((word) => {
        let letterArr = word.split('');
        let a = letterArr[0];
        /[a-zA-Z]/.test(a) ? a += 'ay' : a;
        letterArr.push(a);
        letterArr.shift();
        let newWord = letterArr.join('');
        newArray.push(newWord);
    })
    
      return newArray.join(' ');
    }