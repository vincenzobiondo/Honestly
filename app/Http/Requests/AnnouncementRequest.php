<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnnouncementRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; //cambiamo in true per poter utilizzare questa Request
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        //qui dentro scriviamo con sintassi di array chiave => valore. la chiave è il campo input da validare, il valore è il tipo di regola che voglio applicare

        //con required intendo dare come regola che il campo input puo essere vuoto
        return [
            'item'=>'required',
            'price'=>'required',
            'brand_name'=>'required',
            'measurements'=>'required',
            'img'=>'required|image' //separo le mie regole da una pipeline
        ];
    }

    public function messages(){//override sto sovrascrivendo di un metodo presente nella classe genitore

        //ritorna un array chiave valore
        //come chiave devo prendere il nome dell'input . nome della regola
        //come valore il messaggio tradotto o modificato che voglio mostrare
        return[
            'item.required'=>"Il tipo di articolo è obbligatorio",
            'price.required'=>"Il prezzo è obbligatorio",
            'brand_name'=>"Il nome del marchio è obbligatorio",
            'measurements.required'=>"Le misure dell articolo sono obbligatorie",
            'img.required'=>"L'immagine è obbligatoria",
            'img.image'=>"Il file che inserisci deve essere di questi formati jpg, jpeg, png, bmp, gif, svg, or webp"
        ];
    }
}
