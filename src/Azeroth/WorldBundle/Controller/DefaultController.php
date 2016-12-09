<?php

namespace Azeroth\WorldBundle\Controller;

use Azeroth\WorldBundle\Entity\CreatureLootTemplate;
use Azeroth\WorldBundle\Entity\CreatureTemplate;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/creature/template/all")
     */
    public function getAllCreatureTemplatesAction()
    {
        $em = $this->getDoctrine()->getManager();
        $creatures = $em->getRepository(CreatureTemplate::class)->findAll();

        $data = [];

        foreach ($creatures as $creature) {
            $data[] = [
                'id' => $creature->getId(),
                'name' => $creature->getName(),
            ];
        }

        return $this->json($data);
    }

    /**
     * @Route("/creature/template/{id}", requirements={"id" = "\d+"})
     * @param $id
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function getCreatureTemplateAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $creature = $em->getRepository(CreatureTemplate::class)->find($id);

        return $this->json([
            'id' => $creature->getId(),
            'name' => $creature->getName(),
        ]);
    }

    /**
     * @Route("/creature/loot/{id}", requirements={"id" = "\d+"})
     * @param $id
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function getCreatureLootTemplateAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $loots = $em->getRepository(CreatureLootTemplate::class)->findBy([
            'id' => $id
        ]);

        $data = [];

        foreach ($loots as $loot) {
            $data[] = $loot->toArray();
        }

        return $this->json($data);
    }
}
