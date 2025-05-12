Vue.createApp({
    data(){ return {
      form: { email:'', phone:'', message:'' },
      submitted: false
    }},
    methods: {
      validate() {
        let ok = true;
        if (!/\S+@\S+\.\S+/.test(this.form.email)) ok = false;
        if (!/^\d+$/.test(this.form.phone)) ok = false;
        if (!this.form.message) ok = false;
        alert(ok ? 'Valid!' : 'Hatalı giriş!');
      },
      handleSubmit() {
        this.submitted = true;
      },
      handleReset() {
        this.form = { email:'', phone:'', message:'' };
        this.submitted = false;
      }
    }
  }).mount('#contactApp');