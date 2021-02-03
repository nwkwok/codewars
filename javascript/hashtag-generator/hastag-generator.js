function generateHashtag (str) {
    if (!str || !str.trim()) {
      return false
    }
    
  let a = str.split(' ');
  let array = a.map(pascal => toPascalCase(pascal));
  let newArray = array.filter(empty => {
    return empty !== "";
  })
  
  let hash = '#' + newArray.join('')  
  if (hash.length > 140) {
    return false
  } else {
      return hash;
    }
  }    
  
  const toPascalCase = str => {
    let word = str.replace(/\w\S*/g, m => m.charAt(0).toUpperCase() + m.substr(1).toLowerCase());
    return word
  }