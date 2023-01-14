export default class extends window.Controller {

    static values = {command: String}

    static get targets() {
        return ["cmd", "result"]
    }

    commandValueChanged() {
        let config = {
            'headers': {
                'Accept': 'application/json',
                'Content-Type': 'application/json',
            }
        }
        let data = JSON.stringify({
            'command': this.commandValue,
        })

        axios.post('/cmd', data, config)
            .then(res => {
                this.resultTarget.textContent = res.data.data
            })
    }

    exec() {
        this.commandValue = this.cmdTarget.value;
    }
}
