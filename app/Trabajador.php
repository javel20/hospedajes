<?php

namespace hosp;

use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function local()
    {
        return $this->belongsTo(Local::class);
    }


    public function tipotrabajador()
    {
        return $this->belongsTo(Tipotrabajador::class);
    }


    public function licencia()
    {
        return $this->hasMany(Licencia::class);
    }

    public function trabajador()
    {
        return $this->hasMany('App\Trabajador');
    }
    

    public function scopeTrabajadors($query, $dato)
    {
        return $query->join('locals', 'trabajadors.local_id', '=' ,'locals.id')
                    ->join('tipotrabajadors', 'trabajadors.tipotrabajador_id', '=' ,'tipotrabajadors.id')
                    ->where('trabajadors.nombre','LIKE', "%$dato->buscar%")
                    ->orWhere('trabajadors.apellidopaterno','LIKE', "%$dato->buscar%")
                    ->orWhere('trabajadors.apellidomaterno','LIKE', "%$dato->buscar%")
                    ->orWhere('trabajadors.dni','LIKE', "%$dato->buscar%")
                    ->orWhere('trabajadors.estado','LIKE', "%$dato->buscar%")
                    ->orWhere('tipotrabajadors.nombre','LIKE', "%$dato->buscar%")
                    ->select('trabajadors.*', 'tipotrabajadors.nombre as nombrett', 'locals.nombre as nombrel')
                    ->paginate(7);

    }

    public function scopeListaTrabajador($query){

        return $query->leftJoin('users', 'users.trabajador_id', '=', 'trabajadors.id')
                    ->where('users.id', '=' , null)
                    ->select('trabajadors.*', 'users.id as iduser')
                    ->get();

    }

    


}
