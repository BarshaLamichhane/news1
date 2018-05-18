<template>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Country</th>
                    <th>Color</th>
                    <th>Operations</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="pigeon in pigeons">
                    <td>{{pigeon.name}}</td>
                    <td>{{pigeon.country}}</td>
                    <td>{{pigeon.color}}</td>
                    <td><button type="button" class="btn btn-default" v-on:click="showModal(pigeon)">Update</button></td>
                </tr>
            </tbody>
        </table>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" v-on:click="previous()">Previous</a></li>
                <li class="page-item"><a class="page-link" v-on:click="next()">Next</a></li>
            </ul>
        </nav>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group"><label>Name</label><input type="text" v-model="selectedPigeon.name"></div>
                    <div class="form-group"><label>Country</label><input type="text" v-model="selectedPigeon.country"></div>
                    <div class="form-group"><label>Color</label><input type="text" v-model="selectedPigeon.color"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" v-on:click="update()">Save changes</button>
                </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        created: function () {
            this.fetchPigeons();
        },
        mounted(){
            //$('#exampleModal').modal('show');
        },
        data() {
            return {
                pigeons: [],
                nextPageUrl : '/api/pigeons',
                previousPageUrl: null,
                selectedPigeon : {
                    name: '',
                    color: '',
                    country: ''
                }
            }
        },
        methods: {
            fetchPigeons() {
                var instance = this
                axios.get(this.nextPageUrl).then(function(response){
                    console.log(response.data);
                    instance.pigeons = response.data.data
                    instance.nextPageUrl = response.data.next_page_url
                    instance.previousPageUrl = response.data.prev_page_url
                })

            },
            next(){
                this.fetchPigeons();
            },
            previous(){
                if(this.previousPageUrl == null){
                    return;
                }
                this.nextPageUrl = this.previousPageUrl;
                this.fetchPigeons();
            },
            showModal(pigeon){
                this.selectedPigeon = pigeon
                $('#exampleModal').modal('show');
            },
            update(){
                axios.put('/api/pigeon/' + this.selectedPigeon.id , {
                    data: this.selectedPigeon
                }).then(function(response){

                    console.log(response.data)
                })
            }
        },

    }
</script>

<style scoped>

</style>