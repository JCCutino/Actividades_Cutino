function singleThread() {

    process.argv[2] = 'Aprendemos Node.js';
    process.argv[3] = 19;
    process.argv[4] = null;
    process.argv[5] = true

    console.log('---------------------------------------------------');
    console.log('Proceso de NODE.JS               ');
    console.log('Id '+process.pid);
    console.log('Titulo '+process.tittle);
    console.log('Directorio de node '+process.execPath);
    console.log('Directorio actual '+process.cwd);
    console.log('Version de Node '+process.version);
    console.log('Versiones Dependencias '+process.versions);
    console.log('Plataforma (5.0) '+process.platform);
    console.log('Arquitecura (5.0) '+process.arch);
    console.log('Tiempo activo de Node '+process.uptime());
    console.log('Argumentos del proceso '+process.argv);
    console.log('---------------------------------------------------');

    let key = 0;
    for(key in process.argv){
        console.log(process.argv[key]);
    }
}

singleThread();