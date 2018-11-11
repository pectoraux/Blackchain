const express = require('express')
const app = express()

app.get('/block/{BLOCK_HEIGHT}', (req, res) => res.send({"hash":"49cce61ec3e6ae664514d5fa5722d86069cf981318fc303750ce66032d0acff3","height":{BLOCK_HEIGHT},"body":"First block in the chain - Genesis block","time":"1530311457","previousBlockHash":""}))

app.listen(8000, () => console.log('API service is listening on port 8000!'))


const bitcoin = require('bitcoin');

// Bitcoin-core: verifyMessage
function verifyMessage(walletAddress, signature, BLOCK_HEIGHT){
 response = 'false';
 const client = new bitcoin.Client({
   host: 'localhost',
   port: 8000,
   user: 'user',
   pass: 'password!'
 });
 client.cmd('verifymessage', walletAddress, signature, BLOCK_HEIGHT, function(err, result, resHeaders) {
   if (err) {
     // console.log(err);
     return console.log("Incorrect submission");
   }
   if (result===true) {
     console.log({"hash":walletAddress,"height":BLOCK_HEIGHT,"body":"First block in the chain - Genesis block","time":"1530311457","previousBlockHash":""});
   }  
   console.log(' Validation: ', result);
   response = result;
 })
};
