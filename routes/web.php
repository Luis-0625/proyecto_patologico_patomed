<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

Route::get('login', function () {
    return view('login.index');
})->name('login.index');

Route::get('panel_inicio/ingreso', function () {
    return view('panel_inicio.ingreso');
})->name('panel_inicio.ingreso');

Route::post('panel_inicio/ingreso', function (Request $request) {
    return $request->all();
})->name('panel_inicio.ingreso.store');

Route::get('panel_inicio/busqueda', function () {
    return view('panel_inicio.busqueda');
})->name('panel_inicio.busqueda');

Route::get('panel_inicio/reportes', function () {
    return view('panel_inicio.reportes');
})->name('panel_inicio.reportes');

Route::post('/login', function (Request $request) {

    // Esto es solo un login básico sin base de datos
    $user = $request->username;
    $pass = $request->password;

    // EJEMPLO: usuario y contraseña fijos
    if ($user === "medico@gmail.com" && $pass === "12medico3*#") {
        return redirect()->route('panel_inicio.ingreso');
    }

    return back()->with('error', 'Usuario o contraseña incorrectos');
})->name('login.auth');

