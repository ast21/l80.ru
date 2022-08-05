export default class extends window.Controller {

    static get targets() {
        return ["code", "output", "error"]
    }

    exec() {
        let config = {
            'headers': {
                'Accept': 'application/json',
                'Content-Type': 'application/json',
            }
        }
        let data = JSON.stringify({
            'content': this.codeTarget.value,
        })

        axios.post('/api/interpreter/exec', data, config)
            .then(res => {
                this.outputTarget.textContent = res.data.output
                this.errorTarget.textContent = res.data.error
            })
    }
}
