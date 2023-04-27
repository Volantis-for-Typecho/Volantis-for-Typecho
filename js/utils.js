function formatDate(date, format) {
  if(!date) return '';
  const padZero = (str, len) => {
    str = String(str);
    while(str.length < len) {
      str = '0' + str;
    }
    return str;
  };
  const year = date.getFullYear();
  const month = padZero(date.getMonth() + 1, 2);
  const day = padZero(date.getDate(), 2);
  const hour = padZero(date.getHours(), 2);
  const minute = padZero(date.getMinutes(), 2);
  const second = padZero(date.getSeconds(), 2);
  return format.replace('YYYY', year).replace('MM', month).replace('DD', day).replace('HH', hour).replace('mm', minute).replace('ss', second);
}

module.exports = {
  formatDate,
};
