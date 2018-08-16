var octet = '(?:25[0-5]|2[0-4][0-9]|1[0-9]{2}|[1-9][0-9]|[0-9])';
  var ip    = '(?:' + octet + '\\.){3}' + octet;
  var quad  = '(?:\\[' + ip + '\\])|(?:' + ip + ')';
  var ipRE  = new RegExp( '(' + quad + ')' );

  function validateip( value ) {
    if ( ipRE.test( value ) ) {
      
    } else {
      alert( 'IP Inválido' );
    }
  }