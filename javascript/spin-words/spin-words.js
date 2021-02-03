function spinWords(words){
  
    let wordArray = words.split(" ");
    let output = [];
  
  for (let i = 0; i < wordArray.length; i++) {
   if (wordArray[i].length >= 5) {   
      output.push(wordArray[i].split("").reverse().join(""))
      } else {
          output.push(wordArray[i]);
      }
   }
    
    return output.join(" ");
    }