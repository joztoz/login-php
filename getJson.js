var myHeaders = new Headers();
myHeaders.append("XSRF-TOKEN", "--- SEM POTREBUJEM TOKEN Z LOGINU --- ");
myHeaders.append("Content-Type", "application/json");
myHeaders.append("Cookie", "web-auth=true; XSRF-TOKEN= --- SEM POTREBUJEM TOKEN Z LOGINU --- ; JSESSIONID=98c14975-4baf-4cd9-93a9-d1d18f887dd9");

var raw = JSON.stringify({"devIds":"160188615046621","devTypeId":"38"});

var requestOptions = {
  method: 'POST',
  headers: myHeaders,
  body: raw,
  redirect: 'follow'
};

fetch("https://eu5.fusionsolar.huawei.com/thirdData/getDevRealKpi", requestOptions)
  .then(response => response.text())
  .then(result => console.log(result))
  .catch(error => console.log('error', error));
