Vue.createApp({
    data(){ return {
      form: { email:'', telefon:'', mesaj:'' },
      submitted: false
    }},
    methods: {
      validate() {
        let ok = true;
        if (!/\S+@\S+\.\S+/.test(this.form.email)) ok = false;        
        if (!/^\d+$/.test(this.form.telefon)) ok = false;
        if (!this.form.mesaj) ok = false;
        alert(ok ? 'Valid!' : 'Hatalı giriş!');
      },
      handleSubmit() {
        this.submitted = true;
      },
      handleReset() {
        this.form = { email:'', telefon:'', mesaj:'' };
        this.submitted = false;
      }
    }
  }).mount('#contactApp');