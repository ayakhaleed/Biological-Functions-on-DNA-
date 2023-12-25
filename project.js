function Validate() {
  if (document.getElementById('selectall').checked) {
    document.getElementById('gene-ident').disabled = true;
    document.getElementById('locus-tag').disabled = true;
    document.getElementById('prot-id').disabled = true;
    document.getElementById('select-value').disabled = true;
  } else {
    document.getElementById('selectall').disabled = true;
  }

  var select_value = document.getElementById('select-value').value;
  if (select_value == '' && !document.getElementById('selectall').checked) {
    alert('Select value must be filled out!');
    return false;
  }
  if (select_value.length > 100) {
    alert('Select value must be less than 100 character!');
    return false;
  }
}
