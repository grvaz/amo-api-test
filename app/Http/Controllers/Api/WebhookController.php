<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\Api;
use Illuminate\Http\Request;

class WebhookController extends Controller
{
    public function __invoke(Request $request)
    {
        foreach ($request->all() as $entity => $actions) {
            if (in_array($entity, ['leads', 'contacts'])) {
                foreach ($actions as $action => $data) {
                    foreach ($data as $entityData) {
                        $this->$action($entity, $entityData);
                    }
                }
            }
        }
    }

    private function add($entity, $entityData)
    {
        $user = Api::http()->get('/users/' . $entityData['responsible_user_id'])->json();
        Api::http()
            ->post("/$entity/" . $entityData['id'] . "/notes", [
                [
                    'note_type' => 'common',
                    'params' => [
                        'text' =>
                            'Название: ' . $entityData['name'] . "\n" .
                            'Ответственный: ' . $user['name'] . "\n" .
                            'Время добавления: ' . date('d.m.Y H:i', $entityData['created_at'])
                    ]
                ]
            ]);
    }

    private function update($entity, $entityData)
    {
        $fields = $entityData;
        array_walk($fields, function(&$value, $key) {
            $value = "{$key}: {$value}";
        });
        $fields = implode("\n", $fields);
        Api::http()
            ->post("/$entity/" . $entityData['id'] . "/notes", [
                [
                    'note_type' => 'common',
                    'params' => [
                        'text' =>
                            'Время изменения: ' . date('d.m.Y H:i', $entityData['updated_at']) . "\n" .
                            $fields
                    ]
                ]
            ]);
    }
}
