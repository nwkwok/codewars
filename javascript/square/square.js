var isSquare = function(n) {
    if (n < 0) {
      return false
    } 
    
  if (Math.sqrt(n) % 1 !== 0) {
    return false
  } else { 
    return true 
    }
  
  }