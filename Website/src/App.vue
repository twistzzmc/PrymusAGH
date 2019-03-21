

<template>
  <div>
    <h1>Participants list</h1>
    <ol>
      <participants-list :list="people"></participants-list>

      <new-participant-form @added="addNewParticipant($event)"></new-participant-form>
    </ol>
  </div>
</template>

<script>
  import ParticipantsList from "./ParticipantsList.vue";
  import NewParticipantForm from "./NewParticipantForm.vue";

  export default {
    components: {ParticipantsList, NewParticipantForm},

    data() {
      return {
          people: []
      };
    },
    methods: {
      addNewParticipant(participant) {
        this.people.push(participant);
      }
    }
  };
</script>
