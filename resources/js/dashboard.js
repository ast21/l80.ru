import InterpreterController from "./controllers/InterpreterController"
import CmdrController from "./controllers/CmdController";

application.register("interpreter", InterpreterController);
application.register("cmd", CmdrController);


document.addEventListener('DOMContentLoaded', () => {
    document.getElementById('cmd-input').addEventListener('keyup', function () {
        console.log('cmd-input')
        document.getElementById('cmd').dataset.cmdCommandValue = this.value;
    })
});
