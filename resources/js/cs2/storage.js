import { elements } from "./config";
import { updateCrosshair } from "./preview";
import { toast } from "../components/toast";

const STORAGE_KEY = "elhash-crosshairs";

export function getCurrentCrosshair(){

    return{

        size:elements.size.value,

        thickness:elements.thickness.value,

        gap:elements.gap.value,

        color:elements.color.value,

        dot:elements.centerDot.checked,

        outline:elements.outline.checked

    };

}