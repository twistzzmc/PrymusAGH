<template>
  <div>
      <h3>New participant</h3>
    <form @submit.prevent="addNewParticipant()">
          <p><label>Firstname</label></p>
          <input type="text" v-model="newPerson.firstname">
          <p><label>Lastname</label></p>
          <input type="text" v-model="newPerson.lastname">
          <p><button>Add new participant</button></p>
      </form>
  </div>
</template>

<script>
  export default {
    data() {
      return {
          newPerson: {firstname: '', lastname: ''},
        };
    },
    methods: {
      addNewParticipant() {
        this.$emit('added', this.newPerson);
        this.newPerson = {};
      }
    }
  };
</script>
