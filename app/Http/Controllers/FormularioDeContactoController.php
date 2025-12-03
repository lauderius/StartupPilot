// Uso da Model
use App\Models\FormularioDeContacto;

// ...
public function store(Request $request)
{
    // ...
    FormularioDeContacto::create($dadosValidados); // Uso no armazenamento
    // ...
}
