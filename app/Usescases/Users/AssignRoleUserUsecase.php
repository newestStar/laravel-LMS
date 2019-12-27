<?php


namespace App\Usescases\Users;


use App\Repositories\Contracts\UserRepositoryInterface;
use App\Services\Roles\Contracts\ServiceRoleInterface;
use App\Usescases\Users\Contracts\AssignRoleUserUsecaseInterface;


class AssignRoleUserUsecase implements AssignRoleUserUsecaseInterface
{

    /**
     * @var ServiceRoleInterface
     */
    private $serviceRole;
    /**
     * @var UserRepositoryInterface
     */
    private $userRepository;

    public function __construct(ServiceRoleInterface $serviceRole, UserRepositoryInterface $userRepository)
    {
        $this->serviceRole = $serviceRole;
        $this->userRepository = $userRepository;
    }
    public function handle(int $id, string $role): bool

    {
        $user = $this->userRepository->findById($id);
        return $this->serviceRole->assignRole($user, $role);
    }
}
