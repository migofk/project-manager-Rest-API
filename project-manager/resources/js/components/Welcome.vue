 <template>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                   {{title}}
                </div>
                <button id="btn" class="" v-on:click="getJokes">Get Jokes</button>
                <div class="links">
                    <a v-for="joke in jokes" href="https://laravel.com/docs">{{joke.name}}</a>
                  
                   
                </div>
            </div>
        </div>
    </template>
    <script>
       export default {
           props : ['title'],
           data () {
    return {
      jokes: [],
      loading: false
    }
  }, 

 methods: {
    getJokes: function () {
         /*  this.jokes ={"name":"qq"};*/
      this.loading = true;
      axios.get("http://localhost/project-manager-api/project-manager-Rest-API/project-manager/public/api/tasks")
      .then((response)  =>  {
          console.log(response.data);
        this.loading = false;
        this.jokes = response.data.data;
      }, (error)  =>  {
        this.loading = false;
      })
    } 
  },

  beforeMount(){
    this.getJokes()
 },

       }
    </script>
    <style scoped>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>