function songDecoder(song){
    return song.split('WUB').filter(lyric => lyric !== '').join(' ');
  }