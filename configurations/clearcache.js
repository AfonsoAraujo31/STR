const cron = require('node-cron');
const exec = require('child_process').exec;

// Agendar a execução do arquivo em intervalos regulares
cron.schedule('0 0 */5 * *', () => {
  // Comando a ser executado
  exec('node ./cache.ts', (error, stdout, stderr) => {
    if (error) {
      console.error(`Erro: ${error.message}`);
      return;
    }
    console.log(`Saída: ${stdout}`);
    console.error(`Erro: ${stderr}`);
  });
});
