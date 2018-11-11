/* ===== SHA256 with Crypto-js ===============================
|  Learn more: Crypto-js: https://github.com/brix/crypto-js  |
|  =========================================================*/

const SHA256 = require('crypto-js/sha256');
const db = require('level')('./chaindata');

/* ===== Block Class ==============================
|  Class with a constructor for block 			   |
|  ===============================================*/

class Block{
	constructor(data){
     this.hash = "",
     this.height = 0,
     this.body = data,
     this.time = 0,
     this.previousBlockHash = ""
    }
}

/* ===== Blockchain Class ==========================
|  Class with a constructor for new blockchain 		|
|  ================================================*/

class Blockchain{
  constructor(){
    // this.chain = [];
    this.getBlockHeight().then((height) => {
      if(height === -1){
        this.addBlock(new Block("First block in the chain - Genesis block"))
        .then(() => console.log("Genesis block added !"));
      }
    });
  }

  // Add new block
  async addBlock(newBlock){
    const height = parseInt(await this.getBlockHeight());
    // Block height
    newBlock.height = height + 1;
    // UTC timestamp
    newBlock.time = new Date().getTime().toString().slice(0,-3);
    // previous block hash
    if(newBlock.height > 0){
      newBlock.previousBlockHash = await this.getBlock[height];
      console.log(`Previous hash: ${newBlock.previousBlockHash}`);
    }
    // Block hash with SHA256 using newBlock and converting to a string
    newBlock.hash = SHA256(JSON.stringify(newBlock)).toString();
    console.log(`New hash: ${newBlock.hash}`);
    // Adding block object to chain
    await this.addBlockToDB(newBlock.height, JSON.stringify(newBlock));
    
  }

  // Get block height
  async getBlockHeight(){
      return await this.getBlockHeightFromDB;
    }
  

    // get block
    async getBlock(blockHeight){
      // return object as a single string
      return JSON.parse(await this.getBlockFromDB(blockHeight));
    }

    // validate block
    async validateBlock(blockHeight){
      // get block object
      let block = await this.getBlock(blockHeight);
      // get block hash
      let blockHash = block.hash;
      // remove block hash to test block integrity
      block.hash = '';
      // generate block hash
      let validBlockHash = SHA256(JSON.stringify(block)).toString();
      // Compare
      if (blockHash===validBlockHash) {
          return true;
        } else {
          console.log('Block #'+blockHeight+' invalid hash:\n'+blockHash+'<>'+validBlockHash);
          return false;
        }
    }

   // Validate blockchain
    async validateChain(){
      let errorLog = [];
      let previousHash = '';
      let isValidBlock = false;

      const height = await this.getBlockHeightFromDB();

      for (var i = 0; i < height; i++) {
        this.getBlock(i)
        .then((block) => {
          isValidBlock = this.validateBlock(block.height);
          if(!isValidBlock){
            errorLog.push(i);
          }

          if(block.previousBlockHash !== previousHash){
            errorLog.push(i);
          }
          previousHash = block.hash;

          if (i === (height - 1)){
            if(errorLog.length > 0){
              console.log('Block errors = ' + errorLog.length);
              console.log('Blocks: '+errorLog);
            } else {
              console.log('No errors detected');
            }
          }
        }); 
      } 
    }

  // Level db functions
  addBlockToDB(key, value) {
    return new Promise((resolve, reject) => {
      db.put(key, value, (error) => {
        if(error) {
          reject(error);
        }

        console.log(`Added block #${key}`);
        resolve(`Added block #${key}`);
      });
    });
  }

  getBlockFromDB(key){
    return new Promise((resolve, reject) => {
      db.get(key, (error, value) => {
        if(error){
          reject(error);
        }
        resolve(value);
      });
    });
  }

  getBlockHeightFromDB(){
    return new Promise((resolve, reject) => {
      let height = -1;

      db.createReadStream().on('data', (data) => {
        height++;
      }).on('error', (error) => {
        reject(error);
      }).on('close', () => {
        resolve(height);
      });
    });
  }
}
