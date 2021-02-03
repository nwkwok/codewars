function iqTest(numbers) {

    let array = numbers.split(" ")
    
      let even = []
      let odd = []
      let indexValue = ""
      
      for (let i = 0; i < array.length; i++ ) {
        if (array[i] % 2 === 0) {
          even.push(array[i]) 
          } else {
          odd.push(array[i])
          }
      }
    
        if (even.length > 1 && odd.length === 1) {
            indexValue = array.indexOf(odd[0]) + 1
          } else if (odd.length > 1 && even.length === 1 ) {
            indexValue = array.indexOf(even[0]) + 1
          };
    
      return indexValue;
    }