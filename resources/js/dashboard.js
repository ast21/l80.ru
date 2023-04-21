import InterpreterController from "./controllers/InterpreterController"
import CmdrController from "./controllers/CmdController";

application.register("interpreter", InterpreterController);
application.register("cmd", CmdrController);


document.addEventListener('DOMContentLoaded', () => {
    let cmd = document.getElementById('cmd-input');
    if (cmd) {
        cmd.addEventListener('keyup', function () {
            document.getElementById('cmd').dataset.cmdCommandValue = this.value;
        })
    }
});
