import { Controller } from '@hotwired/stimulus';
import axios from 'axios';

export default class extends Controller {
    static values = {
        infoUrl: String,
    };

    play(event) {
        event.preventDefault();

        const currentAudio = this.element.dataset.currentAudio;



        if (currentAudio && !currentAudio.paused) {
            currentAudio.pause();

        }

        axios.get(this.infoUrlValue)
            .then((response) => {
                const audio = new Audio(response.data.url);

                audio.play();
            });
    }
}
