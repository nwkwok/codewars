function createPhoneNumber(numbers){
    let phoneNumber = ""
    let firstThree = ""
    let secondThree = ""
    let lastFour = ""
      for (let i = 0; i <= 9; i++) {
        if (i <= 2) {
         firstThree += numbers[i]
        }
      if (i > 2 && i <= 5) {
         secondThree += numbers[i];
      }
      if (i > 5 && i <= 9) {
         lastFour += numbers[i];
      }
      }
      phoneNumber = `(${firstThree}) ${secondThree}-${lastFour}`;
      return phoneNumber;
      
      }